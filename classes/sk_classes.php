<?php

class Skill
{
  var $name; //�������� ������
  var $level; //�������� (�������) ������
  var $description; //�������� ������
}

class Monster
{
  var $name; //�������� ����
  var $description; //�������� ����
  
  var $base_damage; //������� �����������
  
  var $level; //������� ����

  var $strain; //���� (��������)
  var $health; //��������
  var $attack; //�����
  var $dodge; //������
  var $armor; //�����
}

class Character
{
  var $name; //��� ���������
  var $level; //������� ���������
  var $strain; //���� (��������)
  
  //�������� �������������� ���������
  var $strength; //����
  var $dexterity; //��������
  var $intelligence; //���������
  var $wisdom; //��������
  
  //���������� �������������� (����������� �� ��������)
  var $health; //��������
  var $physical_attack; //���������� �����
  var $dodge; //������
  var $armor; //�����
  var $carrying_capacity; //����������������
  
  //���������� �������������� (����������� �� ��������)
  var $magic_attack; //���������� �����
  var $magic_energy; //���������� ������� (����)
  
  /*
  function __construct()
  {
    $this->name = "MyDestructableClass";
  }
  */

  
  //������ ���-�� �������� ���� ��� �������� ������� ������ �� 1.
  function CalculateFightingSkills($skill)
  {
    $arr_k = Array(
      "one" => $skill * 10,
      "two" => $skill * 5,
    );
    
  
    return $arr_k;
  }
  
  //������ ������ ���������; 2� �� 1 ������
  function CalculateOxygenStock($skill)
  {
    $oxygen_stock = 120 + ($skill * 2);
    $oxygen_stock = date("H:i:s", $oxygen_stock);
    
    return $oxygen_stock;
  }
  
  //������ ���������; 5 � �� 1 �������
  function CalculateThresholdValueOfWeariness($level)
  {
    $threshold_value = 120 + ($level * 7);
    $threshold_value = date("H:i:s", $threshold_value);
    
    return $threshold_value;
  }
}

?>