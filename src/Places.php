<?php
    class Places
    {
        private $place;
        private $duration;

        function __construct($place, $duration)
        {
            $this->place = $place;
            $this->duration = $duration;

        }

        function setPlace($new_place)
        {
            $this->place = (string) $new_place ;
        }

        function getPlace()
        {
            return $this->place;
        }

        function setDuration($new_duration)
        {
            $this->duration = (string) $new_duration ;
        }

        function getDuration()
        {
            return $this->duration;
        }

        function save()
        {
            array_push($_SESSION['list_of_places'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_places'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_places'] = array();
        }
    }
?>
