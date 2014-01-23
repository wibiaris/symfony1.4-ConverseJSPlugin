$.getJSON('http://cinta.co.id:5280/http-pre-bind', function (data) {
        var connection = new Strophe.connection(converse.bosh_service_url);

         
        connection.attach(data.jid, data.sid, data.rid, function (status) {
            if ((status === Strophe.Status.ATTACHED) || (status === Strophe.Status.CONNECTED)) {
                converse.onConnected(connection)
            }
        });
    }
);