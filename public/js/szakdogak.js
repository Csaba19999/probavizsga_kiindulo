$(function () {
    const token = $('meta[name="csrf-token"]').attr("content");
    const myAjax = new MyAjax(token);
    const szuloElem = $(".listaadmin");
    const sablonElem = $(".lista-elem");
    let szakdogak = [];
    let apiVegpont = "http://127.0.0.1:8000/api/szakdogak";

    myAjax.getAdat(apiVegpont, szakdogak, szakdogakFeltoltese);
    function szakdogakFeltoltese(szakdogak) {
        //szuloElem.empty()
        sablonElem.show();
        szakdogak.forEach(function (szakdoga) {
            const ujElem = sablonElem.clone().appendTo(szuloElem);
            const ujSzakdoga = new Szakdoga(ujElem, szakdoga);
        });
        sablonElem.hide();
    }
});