<?php
/**
 * Created by PhpStorm.
 * User: chan
 * Date: 2021/4/8
 * Time: 16:55
 */

//单例
class Singleton
{
  private static $instance;

  //禁止使用new创造对象
  private function __construct(){}

  public static function getInstance(){
    if(!isset(self::$instance)){
      self::$instance = new self;
    }
    return self::$instance;
  }

  //禁止克隆对象
  private function __clone(){}
}

//工厂模式
class Dog
{
  public function doSomething(){
    echo "这是Dog类的一个方法";
  }
}
class Cat
{
  public function doSomething(){
    echo "这是Cat类的一个方法";
  }
}
abstract class Factory
{
  abstract static function createAnimial();
}

class DogFactory extends Factory
{
  public static function createAnimial()
  {
    // TODO: Implement createAnimial() method.
    return new Dog();
  }
}

class CatFactory extends Factory
{
  public static function createAnimial()
  {
    // TODO: Implement createAnimial() method.
    return new Cat();
  }
}

//观察者模式
interface Observer
{
  public function eat();
}

class Cat2 implements Observer
{
  public function eat()
  {
    // TODO: Implement eat() method.
    echo 'cat eat fish';
  }
}
class Dog2 implements Observer
{
  public function eat()
  {
    // TODO: Implement eat() method.
    echo 'dog eat bones';
  }
}

interface Subject
{
  public function addObserver($key, Observer $observer);
  public function removeObserver($key);
  public function notify();
}

class Action implements Subject
{
  public $_observer = [];
  public function addObserver($key, Observer $observer)
  {
    // TODO: Implement addObserver() method.
    $this->_observer[$key] = $observer;
  }
  public function removeObserver($key)
  {
    // TODO: Implement removeObserver() method.
    unset($this->_observer[$key]);
  }
  public function notify()
  {
    // TODO: Implement notify() method.
    foreach($this->_observer as $item){
      $item->eat();
    }
  }
}