<?php
class Employee {
protected $name;
protected $age;
protected $salary;
public static $totalAge = 0;
public static $totalSalary = 0;

public function __construct($name, $age, $salary) {
    $this->name = $name;
    $this->age = $age;
    $this->salary = $salary;
    self :: $totalSalary += $this->salary; // при каждом создании нового объекта сумма зарплат в свойствах будет увеличиваться
    self :: $totalAge += $this->age; // при каждом создании нового объекта ввозрастная сумма в свойствах будет увеличиваться

}

public function GetAge (){
    return $this -> age;
}

public function GetSalary (){
    return $this -> salary;
}

public function GetName (){
    return $this -> name;
}

public function GetInfoEmployee (){
    echo"
    <p>Имя: <span style = 'color: green';>" . $this -> name . "</span>
    <p>Возраст: " . $this -> age . "</p>
    <p>Зарплата: " . $this -> salary . "</p>";
}
public function checkAge(){
   return $this -> age > 18 ? true : false;

}
public static function GetTotalSalary (){
    return self :: $totalSalary;
}

public static function GetTotalAge (){
    return self :: $totalAge;
}
};

$employee1 = new Employee ( 'John', 25, 1000);
$employee2 = new Employee ( 'Eric', 26, 2000);
$employee3 = new Employee ( 'Natalia', 46, 224000);
$employee4 = new Employee ( 'Irina', 17, 500);
echo $employee1 ->GetInfoEmployee();
echo $employee2 ->GetInfoEmployee();
echo $employee3 ->GetInfoEmployee();
echo $employee4 ->GetInfoEmployee();
echo "<p>Имя сотрудника из первого созданного объекта: " . $employee1 ->GetName() . "</p>";
echo "<p>Возраст сотрудника из второго созданного объекта: " . $employee2 ->GetAge() . "</p>";
echo "<p>Зарплата сотрудника из третьего созданного объекта: " . $employee3 ->GetSalary() . "</p>";
if ($employee4 ->checkAge() === true){
    echo "<p> Сотруднику " . $employee4-> GetName() . "больше 18 лет </p>";
} else{echo "<p style = 'color:red';> Сотруднику " . $employee4->GetName() . " меньше 18 лет </p>";};


//вариант решения 2: через создание статического св-ва и метода
echo "<p>Общая сумма зарплат всех сотрудников равна " . Employee ::$totalSalary . "</p>";
echo "<p>Общая сумма возрастов всех сотрудников равна " .Employee ::$totalAge . "</p>";

//вариант решения 1

$salaryEmployee1 =  $employee3 ->GetSalary();
$salaryEmployee2 =  $employee4 ->GetSalary();
$totalsalary = $salaryEmployee1 + $salaryEmployee2;
echo "<p>Сумма зарплат сотрудников из двух последних созданных классов  = $totalsalary</p>";
