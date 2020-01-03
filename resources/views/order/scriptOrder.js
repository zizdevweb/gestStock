let generer= document.getElementById("generer");
let nbreA= document.getElementById("nbre");
let contenu= document.getElementById("order");

/*generer.addEventListener("submit",function(e){
    e.preventDefault();*/
function generer() {
    let nbreArticle = nbreA.value;
    if (nbreArticle !== 0) {
        switch (nbreArticle) {

            case 1:
                contenu.innerHTML = '<div>' +
                    '<input type="text" name="v1"/> <input type="number" name="n1"/>' +
                    '</div>'
                break
            case 2:
                contenu.innerHTML = '<div>' +
                    '<input type="text" name="v1"/> <input type="number" name="n1"/>' +
                    '<input type="text" name="v2"/> <input type="number" name="n2"/>' +
                    ' </div>'
                break;
            case 3:
                contenu.innerHTML = '<div>' +
                    '<input type="text" name="v1"/> <input type="number" name="n1"/>' +
                    '<input type="text" name="v2"/> <input type="number" name="n2"/>' +
                    '<input type="text" name="v3"/> <input type="number" name="n3"/>' +
                    ' </div>'
                break;
            case 4:
                contenu.innerHTML = '<div>' +
                    '<input type="text" name="v1"/> <input type="number" name="n1"/>' +
                    '<input type="text" name="v2"/> <input type="number" name="n2"/>' +
                    '<input type="text" name="v3"/> <input type="number" name="n3"/>' +
                    '<input type="text" name="v4"/> <input type="number" name="n4"/>' +
                    ' </div>'
                break
            case 5:
                contenu.innerHTML = '<div>' +
                    '<input type="text" name="v1"/> <input type="number" name="n1"/>' +
                    '<input type="text" name="v2"/> <input type="number" name="n2"/>' +
                    '<input type="text" name="v3"/> <input type="number" name="n3"/>' +
                    '<input type="text" name="v4"/> <input type="number" name="n4"/>' +
                    '<input type="text" name="v5"/> <input type="number" name="n5"/>' +
                    ' </div>'
                break;
            case 6:
                contenu.innerHTML = '<div>' +
                    '<input type="text" name="v1"/> <input type="number" name="n1"/>' +
                    '<input type="text" name="v2"/> <input type="number" name="n2"/>' +
                    '<input type="text" name="v3"/> <input type="number" name="n3"/>' +
                    '<input type="text" name="v4"/> <input type="number" name="n4"/>' +
                    '<input type="text" name="v5"/> <input type="number" name="n5"/>' +
                    '<input type="text" name="v6"/> <input type="number" name="n6"/>' +
                    ' </div>'
                break;
            case 7:
                contenu.innerHTML = '<div>' +
                    '<input type="text" name="v1"/> <input type="number" name="n1"/>' +
                    '<input type="text" name="v2"/> <input type="number" name="n2"/>' +
                    '<input type="text" name="v3"/> <input type="number" name="n3"/>' +
                    '<input type="text" name="v4"/> <input type="number" name="n4"/>' +
                    '<input type="text" name="v5"/> <input type="number" name="n5"/>' +
                    '<input type="text" name="v6"/> <input type="number" name="n6"/>' +
                    '<input type="text" name="v7"/> <input type="number" name="n7"/>' +
                    ' </div>'
                break;
            case 8:
                contenu.innerHTML = '<div>' +
                    '<input type="text" name="v1"/> <input type="number" name="n1"/>' +
                    '<input type="text" name="v2"/> <input type="number" name="n2"/>' +
                    '<input type="text" name="v3"/> <input type="number" name="n3"/>' +
                    '<input type="text" name="v4"/> <input type="number" name="n4"/>' +
                    '<input type="text" name="v5"/> <input type="number" name="n5"/>' +
                    '<input type="text" name="v6"/> <input type="number" name="n6"/>' +
                    '<input type="text" name="v7"/> <input type="number" name="n7"/>' +
                    '<input type="text" name="v8"/> <input type="number" name="n8"/>' +
                    ' </div>'
                break;
            case 9:
                contenu.innerHTML = '<div>' +
                    '<input type="text" name="v1"/> <input type="number" name="n1"/>' +
                    '<input type="text" name="v2"/> <input type="number" name="n2"/>' +
                    '<input type="text" name="v3"/> <input type="number" name="n3"/>' +
                    '<input type="text" name="v4"/> <input type="number" name="n4"/>' +
                    '<input type="text" name="v5"/> <input type="number" name="n5"/>' +
                    '<input type="text" name="v6"/> <input type="number" name="n6"/>' +
                    '<input type="text" name="v7"/> <input type="number" name="n7"/>' +
                    '<input type="text" name="v8"/> <input type="number" name="n8"/>' +
                    '<input type="text" name="v9"/> <input type="number" name="n9"/>' +
                    ' </div>'
                break;
            case 10:
                contenu.innerHTML = '<div>' +
                    '<input type="text" name="v1"/> <input type="number" name="n1"/>' +
                    '<input type="text" name="v2"/> <input type="number" name="n2"/>' +
                    '<input type="text" name="v3"/> <input type="number" name="n3"/>' +
                    '<input type="text" name="v4"/> <input type="number" name="n4"/>' +
                    '<input type="text" name="v5"/> <input type="number" name="n5"/>' +
                    '<input type="text" name="v6"/> <input type="number" name="n6"/>' +
                    '<input type="text" name="v7"/> <input type="number" name="n7"/>' +
                    '<input type="text" name="v8"/> <input type="number" name="n8"/>' +
                    '<input type="text" name="v9"/> <input type="number" name="n9"/>' +
                    '<input type="text" name="v10"/> <input type="number" name="n10"/>' +
                    ' </div>'
            default:
                contenu.innerHTML = '<div> <p>le nombre d\'article par commande doit etre compris entre 1 et 10 </p></div>'
                break;
        }
    }
}
/*});*/
