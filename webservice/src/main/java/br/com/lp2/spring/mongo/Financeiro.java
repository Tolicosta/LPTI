package br.com.lp2.spring.mongo;

import java.io.Serializable;
import org.springframework.data.mongodb.core.mapping.Document;
import java.math.BigDecimal;


@Document
public class Financeiro implements Serializable{

	private static final long serialVersionUID = 1L;
	
	private String id;
	private java.math.BigDecimal valor;
	private boolean tipo;
	private String data, descricao, usuario;
	
	public BigDecimal getValor() {
		return valor;
	}
	
	public void setValor(BigDecimal valor) {
		this.valor = valor;
	}

	public String getData() {
		return data;
	}

	public void setData(String data) {
		this.data = data;
	}

	public boolean getTipo() {
		return tipo;
	}

	public void setTipo(boolean tipo) {
		this.tipo = tipo;
	}

	public String getId() {
		return id;
	}

	public void setId(String id) {
		this.id = id;
	}

	public String getDescricao() {
		return descricao;
	}

	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}

	public String getUsuario() {
		return usuario;
	}

	public void setUsuario(String usuario) {
		this.usuario = usuario;
	}
		
}