# Nette autoinject
Grouped autoinject of services in Nette Presenter

## Background
If you have to inject some services to presenter just because you need them to initialize, your presenter looks like this:

```
class BasePresenter extends Presenter
{
    /** @var Some\Service1 @inject */
    public $service1;

	/** @var Some\Service2 @inject */
    public $service2;

	/** @var Some\Service3 @inject */
    public $service3;
}
```

So if you want to avoid this, you can use this library.

## Usage

1) Register NetteAutoInject Manager to config.neon and add all services you want to be initialized in presenter:
```
services:
	...
	-
		class: Lulco\NetteAutoInject\Manager
		setup:
			- addService(Some\Service1())
			- addService(Some\Service2())
			- addService(Some\Service3())
	...
```

2) Inject Manager to Presenter:
```
class BasePresenter extends Presenter
{
    /** @var \Lulco\NetteAutoInject\Manager @inject */
    public $autoInject;
}
```

And that's it :)