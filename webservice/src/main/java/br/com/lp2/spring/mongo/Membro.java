package br.com.lp2.spring.mongo;

import java.io.Serializable;
import org.springframework.data.mongodb.core.mapping.Document;

@Document
public class Membro implements Serializable {

	private static final long serialVersionUID = 1L;

	private String id;
	private String nome, telefone, endereco, email;
	private int qtdMembros;
	private int tipo;

	public String getNome() {
		return nome;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	
	public String getTelefone() {
		return telefone;
	}
	
	public void setTelefone(String telefone) {
		this.telefone = telefone;
	}
	
	public String getEndereco() {
		return endereco;
	}
	
	public void setEndereco(String endereco) {
		this.endereco = endereco;
	}
	
	public int getQtdMembros() {
		return qtdMembros;
	}
	
	public void setQtdMembros(int qtdMembros) {
		this.qtdMembros = qtdMembros;
	}
	
	public int getTipo() {
		return tipo;
	}
	
	public void setTipo(int tipo) {
		this.tipo = tipo;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}
	
}