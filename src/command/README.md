# 命令模式

Laravel 中的 Artisan 命令就使用了命令模式。

假设我们有一个调用者类 Invoker 和一个接收调用请求的类 Receiver，在两者之间我们使用命令类 Command 的 execute 方法来托管请求调用方法，这样，调用者 Invoker 只知道调用命令类的 execute 方法来处理客户端请求，从而实现接收者 Receiver 与调用者 Invoker 的解耦。

使用场景：认为是命令的地方都可以使用命令模式，比如： 1、GUI 中每一个按钮都是一条命令。 2、模拟 CMD。

