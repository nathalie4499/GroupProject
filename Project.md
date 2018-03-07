//class: Metadata
*Will return a configuration array to define the relation between [object getter method] and [result name]. The getter methods of the object will be provided by the developer who wants to use this class.
	
	*properties:
	result [] : is an assosiative array with keys to be chosen by the developer and values are the provided object's properties.
	
	*Methods:
	configure(anObject): will take an argument of any type of an object and create the map and store it in the result[] and finally return the result[].

//class Normaliser
*Will convert the object to a resulting array
	properties:
	
	*result[]: is an assosiative array containing the properties of the object as key and the values stored in those properties as values.
	
	*Methods
	doMapping(anArray[]): will receive the array from metadata and will call objects each getter method, then store the values returned in the result[] with property names as keys and property values as values, and finally will return the result[].

//class: Serialiser
*Transform the resulting array to a given format such as Json
	
	*properties:
	none
	
	*methods:
	createFile(anArray[], aFormat): Will take two arguments anArray and aFormat. anArray is the resulting array from Normaliser and the format is up to the user. The key values contained in anArray[] will be converted to the given format.

 