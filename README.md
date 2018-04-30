# Commmand Papers UI 

GruntJS is used for building client-side applications. Use `npm install` from the project root to install dependencies. You can then initiate a 'watch' task by running `grunt` from the terminal. 

# Progressively enhanced date inputs

jQueryUI is used to provide a progressively enhanced experience for those browsers that do not natively support the `type="date"` on `input` element. Because we can be reasonably certain that this particular application will be used by a small number of desktop machines we are using a combination of browser sniffing and object detection to determine whether we should apply the jQueryUI datepicker functionality.