<?php

namespace Nlocascio\Mindbody\MBOSoap;

class GetEnrollmentsRequest extends MBRequest
{

    /**
     * @var ArrayOfInt $LocationIDs
     */
    public $LocationIDs = null;

    /**
     * @var ArrayOfInt $ClassScheduleIDs
     */
    public $ClassScheduleIDs = null;

    /**
     * @var ArrayOfLong $StaffIDs
     */
    public $StaffIDs = null;

    /**
     * @var ArrayOfInt $ProgramIDs
     */
    public $ProgramIDs = null;

    /**
     * @var ArrayOfInt $SessionTypeIDs
     */
    public $SessionTypeIDs = null;

    /**
     * @var ArrayOfInt $SemesterIDs
     */
    public $SemesterIDs = null;

    /**
     * @var ArrayOfLong $CourseIDs
     */
    public $CourseIDs = null;

    /**
     * @var \Carbon\Carbon $StartDate
     */
    public $StartDate = null;

    /**
     * @var \Carbon\Carbon $EndDate
     */
    public $EndDate = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfInt
     */
    public function getLocationIDs()
    {
      return $this->LocationIDs;
    }

    /**
     * @param ArrayOfInt $LocationIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetEnrollmentsRequest
     */
    public function setLocationIDs($LocationIDs)
    {
      $this->LocationIDs = $LocationIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getClassScheduleIDs()
    {
      return $this->ClassScheduleIDs;
    }

    /**
     * @param ArrayOfInt $ClassScheduleIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetEnrollmentsRequest
     */
    public function setClassScheduleIDs($ClassScheduleIDs)
    {
      $this->ClassScheduleIDs = $ClassScheduleIDs;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getStaffIDs()
    {
      return $this->StaffIDs;
    }

    /**
     * @param ArrayOfLong $StaffIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetEnrollmentsRequest
     */
    public function setStaffIDs($StaffIDs)
    {
      $this->StaffIDs = $StaffIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getProgramIDs()
    {
      return $this->ProgramIDs;
    }

    /**
     * @param ArrayOfInt $ProgramIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetEnrollmentsRequest
     */
    public function setProgramIDs($ProgramIDs)
    {
      $this->ProgramIDs = $ProgramIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSessionTypeIDs()
    {
      return $this->SessionTypeIDs;
    }

    /**
     * @param ArrayOfInt $SessionTypeIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetEnrollmentsRequest
     */
    public function setSessionTypeIDs($SessionTypeIDs)
    {
      $this->SessionTypeIDs = $SessionTypeIDs;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSemesterIDs()
    {
      return $this->SemesterIDs;
    }

    /**
     * @param ArrayOfInt $SemesterIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetEnrollmentsRequest
     */
    public function setSemesterIDs($SemesterIDs)
    {
      $this->SemesterIDs = $SemesterIDs;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getCourseIDs()
    {
      return $this->CourseIDs;
    }

    /**
     * @param ArrayOfLong $CourseIDs
     * @return \Nlocascio\Mindbody\MBOSoap\GetEnrollmentsRequest
     */
    public function setCourseIDs($CourseIDs)
    {
      $this->CourseIDs = $CourseIDs;
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->StartDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $StartDate
     * @return \Nlocascio\Mindbody\MBOSoap\GetEnrollmentsRequest
     */
    public function setStartDate(\Carbon\Carbon $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \Carbon\Carbon($this->EndDate);
        } catch (\Exception $e) {
          return null;
        }
      }
    }

    /**
     * @param \Carbon\Carbon $EndDate
     * @return \Nlocascio\Mindbody\MBOSoap\GetEnrollmentsRequest
     */
    public function setEndDate(\Carbon\Carbon $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format("Y-m-d\TH:i:s");
      }
      return $this;
    }

}
