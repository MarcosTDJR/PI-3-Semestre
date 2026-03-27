
public function index() {
    $destaques = Produto::where('destaque', true)->get();
    
    // Certifique-se de que não há nenhum ->where() aqui
    $produtosGerais = Produto::all(); 

    return view('nome_da_sua_view', compact('destaques', 'produtosGerais'));
}