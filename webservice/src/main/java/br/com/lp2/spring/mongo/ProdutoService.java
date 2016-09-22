package br.com.lp2.spring.mongo;

import java.util.List;

import org.springframework.context.ApplicationContext;
import org.springframework.data.domain.Sort;

import br.com.lp2.util.SpringUtil;

public class ProdutoService {

	private ProdutoRepository db;
	
	public ProdutoService() {
		ApplicationContext context=SpringUtil.getContext();
		db = context.getBean(ProdutoRepository.class);	
	}
 
	public List<Produto> findAll(Sort sort) {  
		  return db.findAll(sort);
		 }
	
	public List<Produto> findByNome(String nome){
			return db.findByNome(nome);
	}

	public void deleteById(String id){
		db.deleteById(id);
	}

	public void save(Produto produto){
			db.save(produto);
		}
	}