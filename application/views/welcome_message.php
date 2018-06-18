
<body>
<div id="app">

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12" style="padding:300px">
             <google-login @done="getGUserLogIn" />
        </div>
    </div>
</div>
</div>
 <template id="googleBtn">
        <button ref="signinBtn" class="btn btn-danger"> Sign in with Google</button>
    </template>
