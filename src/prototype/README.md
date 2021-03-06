# 原型模式

相比正常创建一个对象 ( new Foo() )，首先创建一个原型，然后克隆它会更节省开销。因为初始化开销很大，原型模式用到潜复制，类内部的引用类型的变量如 obj 就不会再去实例化一次。

> 实质就是 对象的复制
  对一些大型对象，每次去new，初始化开销很大，这个时候我们 先new 一个模版对象，然后其他实例都去clone这个模版， 这样可以节约不少性能。
  这个所谓的模版，就是原型（Prototype）；
  当然，原型模式比单纯的Clone要稍微升级一下。
  
  
  ## 普通clone
  new 和 clone都是用来创建对象的方法。
  在PHP中， 对象间的赋值操作实际上是引用操作 （事实上，绝大部分的编程语言都是如此! 主要原因是内存及性能的问题) ， 比如 :
  
  ```php
  <?php  
  
  class myclass {
    public $data;
  }
  
  $obj1 = new myclass();
  $obj1->data = "aaa";
  $obj2 = $obj1;
  $obj2->data ="bbb";     //$obj1->data的值也会变成"bbb"
  // 但是如果你不是直接引用，而是clone，那么相当于做了一个独立的副本：
  
  $obj2 = clone $obj1;
  $obj2->data ="bbb";     //$obj1->data的值还是"aaa"，不会关联
  // 这样就得到一个和被复制对象完全没有纠葛的新对象，但两个对象长得是一模一样的。
  ```
  
  > 注意 clone 并不会改变类引用传递的值。这就是潜复制
  
  
  原型模式的主要思想是基于现有的对象克隆一个新的对象出来，一般是用对象内部提供的克隆方法，通过该方法返回一个对象的副本，这种创建对象的方式，相比我们之前说的几类创建型模式还是有区别的，之前的讲述的工厂方法模式与抽象工厂都是通过工厂封装具体的 new 操作的过程，返回一个新的对象，有的时候我们通过这样的创建工厂创建对象不值得，特别是以下的几个场景，可能使用原型模式更简单、效率更高：
  
  > 如果说我们的对象类型不是刚开始就能确定，而是在运行时确定的话，那么我们通过这个类型的对象克隆出一个新的类型更容易。
  有的时候我们可能在实际的项目中需要一个对象在某个状态下的副本，这个前提很重要，这点怎么理解呢，例如有的时候我们需要对比一个对象经过处理后的状态和处理前的状态是否发生过改变，可能我们就需要在执行某段处理之前，克隆这个对象此时状态的副本，然后等执行后的状态进行相应的对比，这样的应用在项目中也是经常会出现的。
  当我们处理的对象比较简单，并且对象之间的区别很小，可能只是很固定的几个属性不同的时候，使用原型模式更合适。