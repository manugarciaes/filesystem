# filesystem

```
    $driver = new LocalDriver(
        new FileFactory()
    );
    
    $filesystem = new FileSystem(
        $driver,
        new BreadCrumb()
    );
    
    // listado de archivos o directorios con nombre, fecha y tipo de archivo
    $fileCollection = $filesystem->readPath('/');
    
    $filesystem->breadcrumb();
   
   
    $fileCollection = $filesystem->readPath('./images');
    $filesystem->breadcrumb();
   
    
```