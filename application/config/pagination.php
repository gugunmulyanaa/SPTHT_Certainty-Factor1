<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Pagination Config Bootstrap 3 CSS Style
 * harviacode.com
 */

$config['query_string_segment'] = 'start';

// $config['full_tag_open'] = '<nav><ul class="pagination" style="margin-top:0px">';
// $config['full_tag_close'] = '</ul></nav>';

// $config['first_link'] = 'First';
// $config['first_tag_open'] = '<li>';
// $config['first_tag_close'] = '</li>';

// $config['last_link'] = 'Last';
// $config['last_tag_open'] = '<li>';
// $config['last_tag_close'] = '</li>';

// $config['next_link'] = 'Next';
// $config['next_tag_open'] = '<li>';
// $config['next_tag_close'] = '</li>';

// $config['prev_link'] = 'Prev';
// $config['prev_tag_open'] = '<li>';
// $config['prev_tag_close'] = '</li>';

// $config['cur_tag_open'] = '<li class="page-item active"><a>';
// $config['cur_tag_close'] = '</a></li>';

// $config['num_tag_open'] = '<li>';
// $config['num_tag_close'] = '</li>';

$config['first_link']       = 'First';
$config['last_link']        = 'Last';
$config['next_link']        = 'Next';
$config['prev_link']        = 'Prev';
$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
$config['full_tag_close']   = '</ul></nav></div>';
$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
$config['num_tag_close']    = '</span></li>';
$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
$config['prev_tagl_close']  = '</span>Next</li>';
$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
$config['first_tagl_close'] = '</span></li>';
$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
$config['last_tagl_close']  = '</span></li>';


/* End of file pagination.php */
/* Location: ./application/config/pagination.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-09 17:25:55 */
/* http://harviacode.com */