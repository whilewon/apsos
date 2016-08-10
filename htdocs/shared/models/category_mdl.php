<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');
/**
 * DiliCMS
 *
 * 一款基于并面向CodeIgniter开发者的开源轻型后端内容管理系统.
 *
 * @package     DiliCMS
 * @author      DiliCMS Team
 * @copyright   Copyright (c) 2011 - 2012, DiliCMS Team.
 * @license     http://www.dilicms.com/license
 * @link        http://www.dilicms.com
 * @since       Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * DiliCMS 分类信息处理模型
 *
 * @package     DiliCMS
 * @subpackage  Models
 * @category    Models
 * @author      Jeongee
 * @link        http://www.dilicms.com
 */
class Category_mdl extends CI_Model
{
	/**
     * 构造函数
     *
     * @access  public
     * @return  void
     */
	public function __construct()
	{
		parent::__construct();
	}
	
	// ------------------------------------------------------------------------

    /**
     * 根据分类模型ID获取分类模型名称
     *
     * @access  public
     * @param   int
     * @return  string
     */
	public function get_cate_by_id($id)
	{
		return $this->db->where('id',$id)->get($this->db->dbprefix('cate_models'))->row()->name;
	}

	// ------------------------------------------------------------------------

    /**
     * 获取所有分类信息
     *
     * @access  public
     * @param   string
     * @param   int
     * @return  array
     */
	public function get_all($model, $level = -1)
	{
		$records = array();
		if ($level > 0)
		{
			$this->db->where('parentid', $level);	
		}
		$query = $this->db->get($this->db->dbprefix('u_c_') . $model);
		foreach ($query->result_array() as $row)
		{
			$row['children'] = $this->get_child_num($row['classid'], $model);
			$records[] = $row;
		}
		return $records;
	}

	// ------------------------------------------------------------------------

    /**
     * 获取父级分类的子分类个数
     *
     * @access  public
     * @param   int
     * @param   string
     * @return  int
     */
	public function get_child_num($classid, $model)
	{
		$data = $this->db->select("COUNT(*) as children")
						 ->where("parentid", $classid)
						 ->get($this->db->dbprefix('u_c_') . $model)
						 ->row_array();
		return $data['children'];
	}

	// ------------------------------------------------------------------------

    /**
     * 递归将分类生成TREE
     *
     * @access  public
     * @param   array
     * @param   int
     * @param   int
     * @param   array
     * @return  array
     */
	public function  get_in_tree($array, $pid = 0, $y, & $tdata = array())
	{
		foreach ($array as $row)
		{
			if ($row['parentid'] == $pid)
			{
				$n = $y + 1;
				$row['deep'] = $y;
				$tdata[] = $row;
				$this->get_in_tree($array, $row['classid'], $n, $tdata);
			}
		}
		return $tdata;
	}
	
	// ------------------------------------------------------------------------

    /**
     * 根据分类模型名称获取所有分类信息
     *
     * @access  public
     * @param   string
     * @return  array
     */
	public function get_category($model)
	{
		return $this->get_in_tree($this->get_all($model), 0, 0);
	}
	
	// ------------------------------------------------------------------------

    /**
     * 移动分类节点
     *
     * @access  public
     * @param   string
     * @param   string
     * @return  bool
     */
	public function move_category($from, $to)
	{
		$data = array(
               'parent_id' => $to
        );
		$this->db->where('class_id', $from);
		$this->db->update($this->db->dbprefix('categories'), $data);
		return TRUE;
	}
	
	// ------------------------------------------------------------------------

    /**
     * 获取所有分类模型
     *
     * @access  public
     * @return  object
     */
	public function get_category_models()
	{
		return $this->db->get($this->db->dbprefix('cate_models'))->result();	
	}

	// ------------------------------------------------------------------------

    /**
     * 根据分类模型ID获取分类模型信息
     *
     * @access  public
     * @param   int
     * @return  object
     */
	public function get_category_model_by_id($id)
	{
		return $this->db->where('id', $id)->get($this->db->dbprefix('cate_models'))->row();	
	}

	// ------------------------------------------------------------------------

    /**
     * 根据分类模型名称获取分类模型
     *
     * @access  public
     * @param   string
     * @return  object
     */
	public function get_category_model_by_name($name)
	{
		return $this->db->where('name', $name)->get($this->db->dbprefix('cate_models'))->row();	
	}
	
	// ------------------------------------------------------------------------

    /**
     * 新增分类模型
     *
     * @access  public
     * @param   array
     * @return  bool
     */
	public function add_new_category($data)
	{
		if ($this->db->insert($this->db->dbprefix('cate_models'), $data))
		{
			$this->load->dbforge();
			$table = 'u_c_' . $data['name'];
			$this->dbforge->drop_table($table);
			$this->dbforge->add_field(array('classid' => array('type' => 'INT', 'constraint' => 5, 'unsigned' => TRUE, 'auto_increment' => TRUE)));
			$this->dbforge->add_key('classid',TRUE);
			$this->dbforge->add_field(array('parentid' => array('type' => 'INT', 'constraint' => 5, 'unsigned' => TRUE, 'default' => 0)));
			$this->dbforge->add_field(array('level' => array('type' => 'INT', 'constraint' => 2, 'unsigned' => TRUE, 'default' => 1)));
			$this->dbforge->add_field(array('path' => array('type' => 'VARCHAR', 'constraint' => 50, 'default'=>"", 'null' => TRUE)));
			$this->dbforge->create_table($table);
			return TRUE;
		}
		return FALSE;	
	}

	// ------------------------------------------------------------------------
	
	/**
     * 修改分类模型
     *
     * @access  public
     * @param   object
     * @param   array
     * @return  bool
     */
	public function edit_category_model($target_model, $data)
	{
		if ($this->db->where('id', $target_model->id)->update($this->db->dbprefix('cate_models'), $data))
		{
			$this->load->dbforge();
			$old_table_name = $target_model->name;
			if ($old_table_name != $data['name'])
			{
				$this->dbforge->rename_table('u_c_' . $old_table_name, 'u_c_' . $data['name']);
				$this->platform->cache_delete(DILICMS_SHARE_PATH . 'settings/category/cate_' . $old_table_name . '.php');
				$this->platform->cache_delete(DILICMS_SHARE_PATH . 'settings/category/data_' . $old_table_name . '.php');
			}
			return TRUE;
		}
		return FALSE;
	}

	// ------------------------------------------------------------------------
	
	/**
     * 删除分类模型
     *
     * @access  public
     * @param   object
     * @return  void
     */
	public function del_category_model($model)
	{
		$this->load->dbforge();
		//删除表
		$this->dbforge->drop_table('u_c_' . $model->name);
		//删除字段
		$this->db->where('model',$model->id)->delete($this->db->dbprefix('cate_fields'));
		//删除附件
		$attachments = $this->db->select('name, folder, type')
								->where('model', $model->id)
								->where('from', 1)
								->get($this->db->dbprefix('attachments'))
								->result();
		foreach($attachments as $attachment)
		{
			$this->platform->file_delete(DILICMS_SHARE_PATH . '../' . setting('attachment_dir') . '/' . $attachment->folder . '/' . $attachment->name . '.' . $attachment->type);		
		}
		$this->db->where('model', $model->id)->where('from', 1)->delete($this->db->dbprefix('attachments'));
		//删除记录
		$this->db->where('id', $model->id)->delete($this->db->dbprefix('cate_models'));
		//清除缓存文件
		$this->platform->cache_delete(DILICMS_SHARE_PATH.'settings/category/cate_' . $model->name . '.php');
		$this->platform->cache_delete(DILICMS_SHARE_PATH.'settings/category/data_' . $model->name . '.php');
	}

	// ------------------------------------------------------------------------
	
	/**
     * 获取分类模型全部字段
     *
     * @access  public
     * @param   int
     * @return  object
     */
	public function get_model_fields($id)
	{
		return $this->db->where('model', $id)->order_by('order', 'ASC')->get($this->db->dbprefix('cate_fields'))->result();
	}

	// ------------------------------------------------------------------------
	
	/**
     * 添加新分类模型字段
     *
     * @access  public
     * @param   object
     * @param   array
     * @return  bool
     */
	public function add_category_field($model, $data)
	{
		$this->load->dbforge();
		$this->load->library('field_behavior');
		$data['model'] = $model->id;
		if ($this->db->insert($this->db->dbprefix('cate_fields'), $data))
		{
			$this->dbforge->add_column('u_c_'.$model->name,$this->field_behavior->on_info($data));
			return TRUE;
		}
		return FALSE;
	}

	// ------------------------------------------------------------------------

	/**
     * 根据字段id获取字段信息
     *
     * @access  public
     * @param   int
     * @return  object
     */
	public function get_field_by_id($id)
	{
		return $this->db->where('id', $id)->get($this->db->dbprefix('cate_fields'))->row();	
	}

	// ------------------------------------------------------------------------

	/**
     * 根据字段name获取字段信息
     *
     * @access  public
     * @param   string
     * @return  object
     */
	public function get_field_by_name($name)
	{
		return $this->db->where('name', $name)->get($this->db->dbprefix('cate_fields'))->row();	
	}

	// ------------------------------------------------------------------------

	/**
     * 检查字段name唯一性
     *
     * @access  public
     * @param   int
     * @param   string
     * @return  object
     */
	public function check_field_unique($model, $name)
	{
		return $this->db->where('model', $model)->where('name', $name)->get($this->db->dbprefix('cate_fields'))->row();
	}

	// ------------------------------------------------------------------------

	/**
     * 修改分类模型字段信息
     *
     * @access  public
     * @param   object
     * @param   object
     * @param   array
     * @return  bool
     */
	public function edit_category_field($model , $field , $data)
	{
		$this->load->dbforge();
		$this->load->library('field_behavior');
		$old_name = $field->name;
		if ($this->db->where('id', $field->id)->update($this->db->dbprefix('cate_fields'), $data))
		{
			$this->dbforge->modify_column('u_c_' . $model->name, $this->field_behavior->on_info($data, $old_name));
			return TRUE;
		}
		return FALSE;
	}

	// ------------------------------------------------------------------------

	/**
     * 删除分类模型字段
     *
     * @access  public
     * @param   object
     * @param   array
     * @return  void
     */
	public function del_category_field($model, $field)
	{
		$this->load->dbforge();
		$this->dbforge->drop_column('u_c_' . $model->name, $field->name);
		$this->db->where('id', $field->id)->delete($this->db->dbprefix('cate_fields'));	
	}

	// ------------------------------------------------------------------------

}

/* End of file category_mdl.php */
/* Location: ./shared/models/category_mdl.php */
