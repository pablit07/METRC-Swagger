/**
 * METRC API
 * Metrc Web API Documentation
 *
 * OpenAPI spec version: 0.2
 * Contact: paul.kohlhoff@gmail.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 *
 * Swagger Codegen version: 2.4.5
 *
 * Do not edit the class manually.
 *
 */

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD.
    define(['expect.js', '../../src/index'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    factory(require('expect.js'), require('../../src/index'));
  } else {
    // Browser globals (root is window)
    factory(root.expect, root.MetrcApi);
  }
}(this, function(expect, MetrcApi) {
  'use strict';

  var instance;

  beforeEach(function() {
    instance = new MetrcApi.DefaultApi();
  });

  var getProperty = function(object, getter, property) {
    // Use getter method if present; otherwise, get the property directly.
    if (typeof object[getter] === 'function')
      return object[getter]();
    else
      return object[property];
  }

  var setProperty = function(object, setter, property, value) {
    // Use setter method if present; otherwise, set the property directly.
    if (typeof object[setter] === 'function')
      object[setter](value);
    else
      object[property] = value;
  }

  describe('DefaultApi', function() {
    describe('unitsofmeasureV1ActiveGet', function() {
      it('should call unitsofmeasureV1ActiveGet successfully', function(done) {
        //uncomment below and update the code to test unitsofmeasureV1ActiveGet
        //instance.unitsofmeasureV1ActiveGet(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
  });

}));