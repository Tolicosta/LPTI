package br.com.lp2.spring.mongo;

import java.io.Serializable;
import org.springframework.data.mongodb.core.mapping.Document;

@Document
public class Evento implements Serializable {

	private static final long serialVersionUID = 1L;

	private String id;
	private String nome, descricao, data, membro, usuario;
	private int frequencia, tipo;

	public String getNome() {
		return nome;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	
	public String getData() {
		return data;
	}
	
	public void setData(String data) {
		this.data = data;
	}
	
	public int getFrequencia() {
		return frequencia;
	}
	
	public void setFrequencia(int frequencia) {
		this.frequencia = frequencia;
	}
	
	public String getDescricao() {
		return descricao;
	}
	
	public void setDescricao(String descricao) {
		this.descricao = descricao;
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

	public String getMembro() {
		return membro;
	}

	public void setMembro(String membro) {
		this.membro = membro;
	}

	public String getUsuario() {
		return usuario;
	}

	public void setUsuario(String usuario) {
		this.usuario = usuario;
	}
	
}