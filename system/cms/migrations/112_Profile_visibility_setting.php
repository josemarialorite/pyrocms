<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Profile_visibility_setting extends CI_Migration {

    public function up()
    {
        $insert = array(
                'slug' => 'profile_visibility',
                'title' => 'View user profile',
                'description' => 'Allow anyone to view registered user\'s profile',
                'type' => 'radio',
                'default' => 0,
                'value' => '',
                'options' => '1=Yes|0=No',
                'is_required' => 0,
                'is_gui' => 1,
                'module' => 'users',
                'order' => 960,
            );

        $this->db->insert('settings', $insert);
    }

    public function down()
    {
		$this->db->where('slug', 'profile_visibility')->delete('settings');
    }
}