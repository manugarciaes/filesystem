# Explicación
He creado un sistema de driver para la lectura de los archivos
de disco ya que así por ejemplo si en un futuro se quisiera
crear un driver para FTP o Amazon sería bastante fácil
de adaptar al sistema.

Mediante el uso de Interfaces y el patrón de injección
de dependencias permitimos que la librería no esté acomplada
a un driver en concreto y nos permite lo que comentaba antes.

He creado que los driver devuelvan siempre un objeto 
conocido (FileCollection y File) ya que así es mucho mejor
trabajar que con un array, al trabajar con un objeto conocido
sabes que propiedades tiene, mientras que con un array
puede venir cualquier cosa y el sistema es menos estable.


He creado alguna que otra excepción pero no les he dado uso
para esta prueba en concreto pero es para que te hagas
una idea :)

Sobre el breadcrumb he hecho algo muy sencillo, un formatter
que pasado el path lo formatea, tambien he usado interfaces
por si se quisiera usar algo diferente en un futuro.

# Command Line
1) Composer install
2) php test.php "src" 
src sería la carpeta que quieres leer, podria ser "./" o "/" por ejemplo

# USAGE

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