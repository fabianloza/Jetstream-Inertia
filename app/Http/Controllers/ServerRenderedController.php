<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerRenderedController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Este mensaje se renderiza desde el Servidor!',
            'message' => 'Las páginas renderizadas del lado del servidor son más amigables para los motores de búsqueda (SEO) ya que el contenido se presenta directamente en el HTML devuelto por el servidor. Al cargar la página, el usuario obtiene el contenido directamente desde el servidor, lo que puede resultar en una carga inicial más rápida, especialmente en conexiones lentas. Al recargar la página, se carga menos JavaScript y lógica del lado del cliente, ya que la mayor parte del procesamiento ya se ha realizado en el servidor.  Si tienes una aplicación basada en Laravel y estándares de servidor tradicionales, tener algunas páginas renderizadas del lado del servidor puede facilitar la transición y mantenimiento. Algunas operaciones críticas o que requieren autenticación pueden manejarse de manera más segura del lado del servidor para evitar posibles ataques maliciosos.'
        ];
        return view('server_rendered_page', $data);
    }
}