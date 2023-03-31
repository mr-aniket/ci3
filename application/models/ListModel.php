<?php
    class ListModel extends CI_Model
    {
        function fetch_the_blogs()
        {
            $resultq = $this->db->query("SELECT `blog_id`, `blog_title`, `blog_data`, `blog_img`, `created`, `updated`, `status` FROM `blogs` WHERE status = '1'");
            return $resultq->result_array();
        }

        function fetch_blog_dtl($blog_id)
        {
            $resultq = $this->db->query("SELECT `blog_id`, `blog_title`, `blog_data`, `blog_img`, `created`, `updated`, `status` FROM `blogs` WHERE blog_id = '$blog_id'");
            return $resultq->result_array();
        }
    }
?>