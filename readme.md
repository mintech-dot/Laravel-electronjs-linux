# laravel electron js for Linux
Making Laravel desktop application using Electron Js For Linux

<p>
    <a href="https://creativecommons.org/licenses/by/4.0/"><img src="https://badgen.net/badge/licence/CC BY 1.0/23BCCB" /></a>
    <a href="https://twitter.com/raid_sobhi"><img src="https://badgen.net/badge/twitter/@raid_sobhi/1DA1F2?icon&label" /></a>
    <a href="https://dev.to/takunda">
 
</a>
</p>
    <a><img src="https://i.ibb.co/VWKyTCG/Screenshot-from-2022-10-08-15-33-41.png" alt="Screenshot-from-2022-10-08-15-33-41" border="0"></a>


### How to use

1. Clone it 

```git clone https://github.com/mintech-dot/Laravel-electronjs-linux```

2. Navigate to the directory

```cd CRUD-Laravel-electronjs```

3. Install dependencies

```npm install``` OR ```yarn install```

4. Run the project
```npm run``` OR ```yarn start```

### Developing

1. cd to www folder(inside the project)

```cd www/```

2. make sure to add the correct php bin path 

```function createWindow() {
  // Create a PHP Server
    phpServer.createServer({
    port: port,
    hostname: host,
    base: `${__dirname}/www/public`,
    keepalive: false,
    open: false,
    bin: '/usr/bin/php',  // <---- this one here
    router: __dirname + '/www/server.php'
  });
  ```

3. Start developing :)

#### You can also try to develop laravel separately then move the files to www folder once. Experiment and give some feedback :)


### Building it

```npm run build``` OR ```yarn build```





