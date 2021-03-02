<?php

    $table  = '<table>';
        $table .= '<thead>';
            $table .= '<tr>';
                $table .= '<td>Selecionar Cliente</td>';
                $table .= '<td>idCliente</td>';
                $table .= '<td>Nome</td>';
                $table .= '<td>Telefone</td>';
                $table .= '<td>Endereço</td>';
                $table .= '<td>Email</td>';
                $table .= '<td>Editar</td>';
                $table .= '<td>Excluir</td>';
            $table .= '</tr>';
        $table .= '</thead>';
    $table .= '</table>';

    echo $table;