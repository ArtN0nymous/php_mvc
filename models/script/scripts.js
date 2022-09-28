function doSearch() {
    var tableReg = document.getElementById('tabla_p');
    //indicamos la tabla donde se realizará la busqueda
    var searchText = document.getElementById('buscar').value.toLowerCase();
    //indicamos el valor que debe comparar entre los elementos de la tabla
    for (var i = 1; i < tableReg.rows.length; i++) {
        //recorremos los elementos
        var cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
        var found = false;
        for (var j = 0; j < cellsOfRow.length && !found; j++) {
            var compareWith = cellsOfRow[j].innerHTML.toLowerCase();
            if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1)) {
                found = true;
            }
        }
        if (found) {
            tableReg.rows[i].style.display = '';
        } else {
            tableReg.rows[i].style.display = 'none';
        }
    }
}

/* Recorrremos las celdas y filas de tabla segun los valores que se ingresen en busca de coincidencias. */