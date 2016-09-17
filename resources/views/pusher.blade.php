<!DOCTYPE html>
<html>
    <head>
        <title>Laravel:Pusher</title>
    <h1>Hello Pusher</h1>
    
    <ul id="users">
        <li v-for="user in users">@{{user.name}}</li>
    </ul>
</head>
<body>


        <!-- <script src="http;//js.pusher.com/3.1/pusher.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/3.0.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
    <script>
//        (function() {
//            var pusher = new Pusher('659a04e0464263271c27', {
//                encrypted: true
//            });
//
//            var channel = pusher.subscribe('test');
//
//            channel.bind('App\\Events\\UserHasRegistered', function(data) {
//                console.log(data);
//            });
//
//        })();

        new Vue({
            el: '#users',
            
            data: {
                users: []
            },
            
            ready: function() {
                var pusher = new Pusher('659a04e0464263271c27', {
                    encrypted: true
                });

                pusher.subscribe('test').bind('App\\Events\\UserHasRegistered', this.addUser);

            },
                    
            methods: {
                addUser:function(user){
                    this.users.push(user);
                }
            }
        });
    </script>
</body>
</html>