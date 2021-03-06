#  访问者模式（Visitor）

访问者模式可以让你将对象操作外包给其他对象。

我们去银行柜台办业务，一般情况下会开几个个人业务柜台的，你去其中任何一个柜台办理都是可以的。我们的访问者模式可以很好付诸在这个场景中：对于银行柜台来说，他们是不用变化的，就是说今天和明天提供个人业务的柜台是不需要有变化的。而我们作为访问者，今天来银行可能是取消费流水，明天来银行可能是去办理手机银行业务，这些是我们访问者的操作，一直是在变化的。

关键：
1. 你的被访问者要有 accept 方法，把自己暴露出去。


场景：
1. 在不改变原有类的情况下，为类增加新的方法。


需要对一个对象结构中的对象进行很多不同的并且不相关的操作，而需要避免让这些操作"污染"这些对象的类，也不希望在增加新操作时修改这些类。
和继承的区别在于：

1. 继承大多数是要给类添加一些公用的方法，是面向多个的，而访问者模式可能只是需要添加一些自己特有的方法，在这时候，你既不想污染原有的类，又不想让所有用户都使用新的类（继承），那么就可以用访问者了。