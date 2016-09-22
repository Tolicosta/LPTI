package br.com.lp2.spring.mongo;

import java.io.Serializable;

import org.springframework.data.mongodb.core.mapping.Document;


@Document
public class Estoque implements Serializable{

	private static final long serialVersionUID = 1L;

	private String id, usuario, doador, assistido, produto;
	private String data;
	private int tipo, quantidade;
	
	public int getTipo() {
		return tipo;
	}
	
	public void setTipo(int tipo) {
		this.tipo = tipo;
	}

	public String getData() {
		return data;
	}

	public void setData(String dataArrecadacao) {
		this.data = dataArrecadacao;
	}

	public int getQuantidade() {
		return quantidade;
	}

	public void setQuantidade(int quantidade) {
		this.quantidade = quantidade;
	}

	public String getUsuario() {
		return usuario;
	}

	public void setUsuario(String usuario) {
		this.usuario = usuario;
	}

	public String getProduto() {
		return produto;
	}

	public void setProduto(String produto) {
		this.produto = produto;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getDoador() {
		return doador;
	}

	public void setDoador(String doador) {
		this.doador = doador;
	}

	public String getAssistido() {
		return assistido;
	}

	public void setAssistido(String assistido) {
		this.assistido = assistido;
	}
	
}