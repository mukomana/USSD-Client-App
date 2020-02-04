<?php

class Subject
{

    public function __construct()
    {}
    
    /* Member Variables */
    private $subjectName;
    private  $courseWorkMark;
    private $examMark;
    private $finalMark;
    
    
    /**
     * @return mixed
     */
    public function getSubjectName()
    {
        return $this->subjectName;
    }

    /**
     * @return mixed
     */
    public function getCourseWorkMark()
    {
        return $this->courseWorkMark;
    }

    /**
     * @return mixed
     */
    public function getExamMark()
    {
        return $this->examMark;
    }

    /**
     * @return mixed
     */
    public function getFinalMark()
    {
        return $this->finalMark;
    }

    /**
     * @param mixed $subjectName
     */
    public function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;
    }

    /**
     * @param mixed $courseWorkMark
     */
    public function setCourseWorkMark($courseWorkMark)
    {
        $this->courseWorkMark = $courseWorkMark;
    }

    /**
     * @param mixed $examMark
     */
    public function setExamMark($examMark)
    {
        $this->examMark = $examMark;
    }

    /**
     * @param mixed $finalMark
     */
    public function setFinalMark($finalMark)
    {
        $this->finalMark = $finalMark;
    }
}

