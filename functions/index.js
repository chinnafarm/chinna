const functions = require('firebase-functions');
const { exec } = require('child_process');
const path = require('path');

exports.sendMail = functions.https.onRequest((req, res) => {
    const command = `php ${path.join(__dirname, 'send_mail.php')}`;
    exec(command, (error, stdout, stderr) => {
        if (error) {
            console.error(`exec error: ${error}`);
            res.status(500).send(stderr);
            return;
        }
        res.status(200).send(stdout);
    });
});
