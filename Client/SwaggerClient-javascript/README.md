# metrc_api

MetrcApi - JavaScript client for metrc_api
Metrc Web API Documentation
This SDK is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.2
- Package version: 0.2
- Build package: io.swagger.codegen.languages.JavascriptClientCodegen
For more information, please visit [https://api-co.metrc.com/Documentation/](https://api-co.metrc.com/Documentation/)

## Installation

### For [Node.js](https://nodejs.org/)

#### npm

To publish the library as a [npm](https://www.npmjs.com/),
please follow the procedure in ["Publishing npm packages"](https://docs.npmjs.com/getting-started/publishing-npm-packages).

Then install it via:

```shell
npm install metrc_api --save
```

##### Local development

To use the library locally without publishing to a remote npm registry, first install the dependencies by changing 
into the directory containing `package.json` (and this README). Let's call this `JAVASCRIPT_CLIENT_DIR`. Then run:

```shell
npm install
```

Next, [link](https://docs.npmjs.com/cli/link) it globally in npm with the following, also from `JAVASCRIPT_CLIENT_DIR`:

```shell
npm link
```

Finally, switch to the directory you want to use your metrc_api from, and run:

```shell
npm link /path/to/<JAVASCRIPT_CLIENT_DIR>
```

You should now be able to `require('metrc_api')` in javascript files from the directory you ran the last 
command above from.

#### git
#
If the library is hosted at a git repository, e.g.
https://github.com/GIT_USER_ID/GIT_REPO_ID
then install it via:

```shell
    npm install GIT_USER_ID/GIT_REPO_ID --save
```

### For browser

The library also works in the browser environment via npm and [browserify](http://browserify.org/). After following
the above steps with Node.js and installing browserify with `npm install -g browserify`,
perform the following (assuming *main.js* is your entry file, that's to say your javascript file where you actually 
use this library):

```shell
browserify main.js > bundle.js
```

Then include *bundle.js* in the HTML pages.

### Webpack Configuration

Using Webpack you may encounter the following error: "Module not found: Error:
Cannot resolve module", most certainly you should disable AMD loader. Add/merge
the following section to your webpack config:

```javascript
module: {
  rules: [
    {
      parser: {
        amd: false
      }
    }
  ]
}
```

## Getting Started

Please follow the [installation](#installation) instruction and execute the following JS code:

```javascript
var MetrcApi = require('metrc_api');

var api = new MetrcApi.DefaultApi()

var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
api.unitsofmeasureV1ActiveGet(callback);

```

## Documentation for API Endpoints

All URIs are relative to *https://https://sandbox.api-co.metrc.com/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*MetrcApi.DefaultApi* | [**unitsofmeasureV1ActiveGet**](docs/DefaultApi.md#unitsofmeasureV1ActiveGet) | **GET** /unitsofmeasure/v1/active | 


## Documentation for Models



## Documentation for Authorization


### basic_auth

- **Type**: HTTP basic authentication

