package br.com.lp2.spring.mongo;

import java.io.Serializable;
import org.springframework.data.mongodb.core.mapping.Document;

@Document
public class Produto implements Serializable{

	private static final long serialVersionUID = 1L;
	
	private String id;
	private String nome;
	private int quantidade;
	
	public String getNome() {
		return nome;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	
	public int getQuantidade() {
		return quantidade;
	}
	
	
	public void setQuantidade(int quantidade) {
		this.quantidade = quantidade;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

}