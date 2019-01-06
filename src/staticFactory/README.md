# 简单工厂、工厂、抽象工厂之间的区别

## 简单工厂
缺点是可实例化的类型在编译期间已经被确定（不易扩展）

## 工厂模式
对比简单工厂模式的优点是，您可以将其子类用不同的方法来创建一个对象。

举一个简单的例子，这个抽象类可能只是一个接口。

这种模式是「真正」的设计模式， 因为他实现了S.O.L.I.D原则中「D」的 「依赖倒置」。

这意味着工厂方法模式取决于抽象类，而不是具体的类。 这是与简单工厂模式和静态工厂模式相比的优势

## 抽象工厂
提供一个创建一系列相关或相互依赖对象的接口，而无需指定它们具体的类。
是围绕一个超级工厂创建其他工厂。

```php
<?php  
 /** 
 * 抽象工厂模式  
 */  
  
//抽象工厂  
interface AnimalFactory {  
      
    public function createCat();  
    public function createDog();  
      
}  
  
//具体工厂  
class BlackAnimalFactory implements AnimalFactory {  
      
    function createCat(){  
        return new BlackCat();  
    }  
      
    function createDog(){  
        return new BlackDog();    
    }  
}  
  
class WhiteAnimalFactory implements AnimalFactory {  
      
    function createCat(){  
        return new WhiteCat();  
    }  
      
    function createDog(){  
        return new WhiteDog();  
    }  
}  
  
//抽象产品  
interface Cat {  
    function Voice();  
}  
  
interface Dog {  
    function Voice();     
}  
  
//具体产品  
class BlackCat implements Cat {  
      
    function Voice(){  
        echo '黑猫喵喵……';  
    }  
}  
  
class WhiteCat implements Cat {  
      
    function Voice(){  
        echo '白猫喵喵……';  
    }  
}  
  
class BlackDog implements Dog {  
      
    function Voice(){  
        echo '黑狗汪汪……';        
    }  
}  
  
class WhiteDog implements Dog {  
      
    function Voice(){  
        echo '白狗汪汪……';        
    }  
}  
  
//客户端  
class Client {  
      
    public static function main() {  
        self::run(new BlackAnimalFactory());  
        self::run(new WhiteAnimalFactory());  
    }  
      
    public static function run(AnimalFactory $AnimalFactory){  
        $cat = $AnimalFactory->createCat();  
        $cat->Voice();  
          
        $dog = $AnimalFactory->createDog();  
        $dog->Voice();  
    }  
}  
Client::main(); 
```