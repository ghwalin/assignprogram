<?php

namespace mod_assignprogram\output;
use renderable;
use renderer_base;
use templatable;
use stdClass;
class view_summary  implements renderable, templatable
{
    private $coursemoduleid = null;

    /**
     * default constructor
     * @param $coursemoduleid
     */
    public function __construct($coursemoduleid) {
        $this->coursemoduleid = $coursemoduleid;
    }

    /**
     * Export this data, so it can be used as the context for a mustache template.
     *
     * @param renderer_base $output
     * @return stdClass
     */
    public function export_for_template(renderer_base $output): stdClass {
        $data = new stdClass();
        $data->link_grading = "view.php?id=$this->coursemoduleid&action=grading";
        $data->link_grader = "view.php?id=$this->coursemoduleid&action=grader";
        return $data;
    }

}