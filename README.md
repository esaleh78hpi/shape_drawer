# Shape Drawer 

## How to add additional shapes (existing types):

   * Just add them to the config.json file
   
## How to add a new shape type:

   * Add a new factory of the new type inside the factory folder
   * Instantiate the factory inside the `loadFactories()` inside the `load_factories` file
   * Add the entry inside the config.json file
   * Add the entry type to the getMenuSelection() inside the autoload file
   * Add the case of the new type to the selection statement inside the draw file
   
## How-to run the drawer

   * just run `php draw.php` from the command line
   
## Notes

   * I used an `AbstractShape` assuming that `borderSize` and `color` are common for all shapes. However, there are some people completely against inheritance (composition over inheritance). So we could easily replace the `AbstractShape` with `ShapeInterface` and define those 2 attributes in every shape.
   * Sorry but I deviated a bit from the instructions. For example, I used a json file instead of array for the input. I had that piece of code already and thought of re-using it :)
   * I did only the command line part. The web can be easily done, but I didn't want to install Apache or even use docker for that. I think the architecture is much more important. However, if you need the web part, I can gladly do it.
   