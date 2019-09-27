<div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow" id="menu-esquerdo">
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

            <li class=" nav-item">
                <a href="{{url('/game')}}">
                    <i class="fa fa-gamepad fa-menu"></i>
                    <span data-i18n="" class="menu-title">&nbsp;Jogar</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="/relatorio">
                    <i class="fa fa-bar-chart fa-menu"></i>
                    <span data-i18n="" class="menu-title">&nbsp;Relatorios</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="/formPergutas">
                    <i class="fa fa-plus-square-o fa-menu"></i>
                    <span data-i18n="" class="menu-title">&nbsp;Cadastrar Perguntas</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="/listarPergunta">

                    <i class="fa fas fa-list-ol fa-menu"></i>
                    <span data-i18n="" class="menu-title">&nbsp;Listar Perguntas</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="/ranking">
                    <i class="fa fas fa-trophy fa-menu"></i>
                    <span data-i18n="" class="menu-title">&nbsp;Ranking</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="#">
                    <i class="fa fas fa-comments fa-menu"></i>
                    <span data-i18n="" class="menu-title">&nbsp;Feedback</span>
                </a>
            </li>
            <!-- <i class=""></i> -->
            <!-- <i class="fas fa-trophy"></i> -->
            <li class=" nav-item">
                <a href="#">
                    <i class="fa fa-power-off fa-menu"></i>
                    <span data-i18n="" class="menu-title">&nbsp;Sair</span>
                </a>
            </li>

        </ul>
    </div>
</div>

<script type="text/javascript">
var appMenu = new Vue({
    el: '#menu-esquerdo',
    data: {
        qtdPublicacoesTriagem   : '',
        qtdPublicacao           : '',
        qtdProcesso            : '',
        load                    : false,
    },
    methods: {
        getQtdPublicacao : function(){
            url = urlBase+"/cliente/publicacao/qtd-novos";
            this.$http.get(url)
            .then((response) => {
                this.qtdPublicacao = response.body;
                if (this.qtdPublicacao != 0) {
                    this.urlPublicacoes = urlBase+"/cliente/publicacoes/3";
                }else {
                    this.urlPublicacoes = urlBase+"/cliente/publicacoes";
                }
                // this.loading = false;
            });
        },
        getQtdProcessos : function(){
            url = urlBase+"/cliente/processo/qtd-processos-novos";
            this.$http.get(url)
            .then((response) => {
                this.qtdProcesso = response.body;
                // console.log(this.qtdProcesso);
                // if (this.qtdProcesso != 0) {
                //     this.urlProcesso = urlBase+"/publicacoes/3";
                // }else {
                //     this.urlProcesso = urlBase+"/publicacoes";
                // }
                // this.loading = false;
            });
        },
        publicacaoesTriagem : function(){
            url = urlBase+"/administracao/publicacoes/triagem";
            this.$http.get(url).then((response) => {
                this.qtdPublicacoesTriagem = response.body;
                console.log(this.qtdPublicacoesTriagem);
            });
        },
        // buscarPublicacoes : function () {
        //     self = this;
        //     retorno = null;
        //     url = urlBase+"/administracao/publicacao/busca-publicacao";
        //
        //     self.$swal({
        //         title: 'Atualizar publicações?',
        //         type: 'question',
        //         html:
        //             // '<input id="swal-input1" class="swal2-input">' +
        //             '<input id="swal-input2" class="swal2-input">',
        //         showCancelButton: true,
        //         showLoaderOnConfirm: true,
        //         preConfirm: function (dta) {
        //             return self.$http.get(url+"/"+moment(self.pesquisa.dtainicio).locale('en').format('YYYY-MM-DD')).then((response) => {
        //                 // self.publicacaoesTriagem();
        //                 // retorno = response.body;
        //                 console.log(response.body);
        //             });
        //         },
        //         allowOutsideClick: false
        //     }).then(function (result) {
        //         codStatus = (retorno.codStatus == 1 ? 'success' : 'error');
        //         msg = (retorno.codStatus != 1 ? retorno.msg : 'Publicações atualizadas e e-mails enviados!');
        //
        //         self.$swal({
        //             type: codStatus,
        //             title: msg,
        //         });
        //     }).catch(self.$swal.noop)
        // },
    },
    created: function(){
        // this.publicacaoesTriagem();
        // this.getQtdPublicacao();
        // this.getQtdProcessos();
    }
});
</script>
