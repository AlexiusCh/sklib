<?php

//k=n*5; ������ ���-�� �������� ���� ��� �������� ������� ������ �� 1.
function CalculateFightingSkills($skill)
{
  $arr_k = Array(
    "one" => $skill * 10,
    "two" => $skill * 5,
  );
  

  return $arr_k;
}

//������ ������ ���������
function CalculateOxygenStock($skill)
{
  $oxygen_stock = 120 + ($skill * 2);
  echo $oxygen_stock.'c. ';
  $oxygen_stock = date("h:i:s", $oxygen_stock);
  
  return $oxygen_stock;
}

//������ ���������
function CalculateThresholdValueOfWeariness($level)
{
  $threshold_value = 120 + ($level * 7);
  echo $threshold_value.'c. ';
  $threshold_value = date("h:i:s", $threshold_value);
  
  return $threshold_value;
}

?>