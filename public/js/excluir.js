function confirmacaoExcluirContato() {

    if (confirm("Tem certeza que deseja excluir este contato?")) {
      document.getElementById("delete-form").submit();
    } else {
        event.preventDefault();
    }
  }
