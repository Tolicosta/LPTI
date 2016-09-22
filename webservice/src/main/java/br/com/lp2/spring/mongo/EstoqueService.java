package br.com.lp2.spring.mongo;

import java.util.List;

import org.springframework.context.ApplicationContext;
import org.springframework.data.domain.Sort;

import br.com.lp2.util.SpringUtil;

public class EstoqueService {

	private EstoqueRepository db;
	
	public EstoqueService() {
		ApplicationContext context=SpringUtil.getContext();
		db = context.getBean(EstoqueRepository.class);	
	}
 
	public List<Estoque> findAll(Sort sort) {  
		  return db.findAll(sort);
		 }
    
	public List<Estoque> findByTipo(int tipo){
		return db.findByTipo(tipo);
	}
	
	public List<Estoque> findByData(String data){
		return db.findByData(data);
	}

	public void deleteById(String id){
		db.deleteById(id);
	}

	public void save(Estoque estoque){
			db.save(estoque);
		}

	public Estoque getOne(String id){
		
		return db.findOne(id);
	}
	
	}