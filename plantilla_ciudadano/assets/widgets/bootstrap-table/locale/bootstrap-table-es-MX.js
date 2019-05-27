/*
 * bootstrap-table - v1.11.0 - 2016-07-02
 * https://github.com/wenzhixin/bootstrap-table
 * Copyright (c) 2016 zhixin wen
 * Licensed MIT License
 */
! function(a) {
    "use strict";
    a.fn.bootstrapTable.locales["es-MX"] = {
        formatLoadingMessage: function() {
            return "Cargando, espere por favor..."
        },
        formatRecordsPerPage: function(a) {
            return a + " registros por página"
        },
        formatShowingRows: function(a, b, c) {
            return "Mostrando " + a + " a " + b + " de " + c + " registros"
        },
        formatSearch: function() {
            return "Buscar"
        },
        formatNoMatches: function() {
            return "No se encontraron registros"
        },
        formatPaginationSwitch: function () {
            return 'Mostrar/ocultar paginación';
        },
        formatRefresh: function () {
            return 'Actualizar';
        },
        formatToggle: function () {
            return 'Alternar';
        },
        formatColumns: function () {
            return 'Columnas';
        },
        formatAllRows: function () {
            return 'Todo';
        },
        formatExport: function () {
            return 'Exportar datos';
        },
        formatClearFilters:function () {
            return 'Limpiar filtros';
        }
    }, a.extend(a.fn.bootstrapTable.defaults, a.fn.bootstrapTable.locales["es-MX"])
}(jQuery);
