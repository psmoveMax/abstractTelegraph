<?php

class Employee {
    public $name, $position, $age;
    public function setParameters($name, $position, $age) {
        $this->name = $name;
        $this->position = $position;
        $this->age = $age;

    }

    public function showEmployeeInfo() {
        echo 'Сотрудник '. $this->name . ' в должности ' . $this->position . PHP_EOL;
    }
}

class Accountant extends Employee {
    public function prepareReport() {
        echo "Я готовлю отчет" . PHP_EOL;
    }
}

class CEO extends Employee {
    public function fireEmployee($name) {
        echo "Я уволил ". $name . PHP_EOL;
    }
}

class Welder extends Employee {
    public function makeWeld() {
        echo "Я варю сварку". PHP_EOL;
    }
}

$acObject = new Accountant();
$acObject->setParameters('Оля', 'Бухгалтер', '30');
$acObject->prepareReport();
$acObject->showEmployeeInfo();


$ceoObject = new CEO();
$ceoObject->setParameters('Ян', 'Начальник', '60');
$ceoObject->fireEmployee();

$weldObject = new Welder();
$weldObject->setParameters('Борис', 'Сварщик', '55');
$weldObject->makeWeld();