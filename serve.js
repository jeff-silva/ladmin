require('dotenv').config();
const { exec, spawn } = require('child_process');
let app_url = new URL(process.env.APP_URL || 'http://localhost:3001');

console.log(process.env.APP_URL);
[`php artisan serve --port=${app_url.port}`, 'npm run dev'].forEach((command, index) => {
    console.log(command);
    // exec(command).stdout.pipe(process.stdout);

    let shell = spawn(command, {shell:true});
    shell.stdin.write('blablabla mane');

    shell.stderr.on('data', (data) => {
        let str = data.toString();
        if (!str) return;
        console.log(`[${index}] ${str}`);
    });

    shell.stdout.on('data', (data) => {
        let str = data.toString();
        if (!str) return;
        console.log(`[${index}] ${str}`);
    });

    // shell.on('exit', function (exitCode) {
    //     console.log(exitCode);
    // });
});
