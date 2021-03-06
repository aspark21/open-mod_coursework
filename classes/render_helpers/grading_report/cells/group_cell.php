<?php

namespace mod_coursework\render_helpers\grading_report\cells;
use coding_exception;
use html_table_cell;
use mod_coursework\grading_table_row_base;
use mod_coursework\models\group;
use mod_coursework\models\user;

/**
 * Class group_cell
 */
class group_cell extends cell_base implements allocatable_cell {

    /**
     * @param grading_table_row_base $row_object
     * @throws coding_exception
     * @return string
     */
    public function get_table_cell($row_object) {
        $content = '';
        /**
         * @var group $group
         */
        $group = $row_object->get_allocatable();
        $content .= '<span class="group">'.$group->name().'</span>';
        $content .= '<br>';
        $content .= '<div class="group_style">';
        $content .= '<select>';


        if ($this->coursework->blindmarking_enabled() && !has_capability('mod/coursework:viewanonymous', $this->coursework->get_context())){
            $content .= '<option class="expand_members" selected="selected">'.get_string('membershidden','coursework').'</option>';
        } else{
            $content .= '<option class="expand_members" selected="selected">'.get_string('viewmembers','coursework').'</option>';
        }

        foreach ($group->get_members() as $group_member) {
            $content .= $this->add_group_member_name($group_member);
        }
        $content .= '</select>';
        $content .= '</div>';
        $content .= '</ul class="group-members">';

        return $this->get_new_cell_with_class($content);
    }

    /**
     * @param array $options
     * @return string
     */
    public function get_table_header($options = array()) {

        //adding this line so that the sortable heading function will make a sortable link unique to the table
        //if tablename is set
        $tablename  =   (isset($options['tablename']))  ? $options['tablename']  : ''  ;

        return $this->helper_sortable_heading(get_string('tableheadgroups', 'coursework'),
                                              'groupname',
                                              $options['sorthow'],
                                              $options['sortby'],
                                              $tablename);
    }

    /**
     * @return string
     */
    public function get_table_header_class(){
        return 'tableheadgroups';
    }

    /**
     * @param user $group_member
     * @return string
     */
    protected function add_group_member_name($group_member) {
        $text = '<option>';
        if ($this->coursework->blindmarking_enabled() && !has_capability('mod/coursework:viewanonymous', $this->coursework->get_context())) {
            $text .= 'Hidden';
        } else {
            $text .= $group_member->profile_link(false);
        }
        $text .= '</option>';
        return $text;
    }

    /**
     * @return string
     */
    public function header_group() {
        return 'empty';
    }
}