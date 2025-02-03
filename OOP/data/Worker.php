<?php

namespace Model {
    interface Worker
    {
        function startWork();
        function endWork();
    }

    class Engineer implements Worker
    {
        private ?string $name;
        private ?string $specialization;
        public function __construct(?string $name, ?string $specialization)
        {
            $this->name = $name;
            $this->specialization = $specialization;
        }
        public function startWork()
        {
            echo "$this->name Pekerjaan dimulai dan Spesialis $this->specialization" . PHP_EOL;
        }
        public function endWork()
        {
            echo "$this->name  Pekerjaan Selesai daan $this->specialization" . PHP_EOL;
        }
    }
}
