package br.com.lp2.spring.mongo;


import java.util.List;
import org.springframework.context.ApplicationContext;
import org.springframework.data.domain.Sort;
import br.com.lp2.util.SpringUtil;

public class FinanceiroService {

	private FinanceiroRepository db;
	
	public FinanceiroService() {
		ApplicationContext context=SpringUtil.getContext();
		db = context.getBean(FinanceiroRepository.class);	
	}
	
	public List<Financeiro> findAll(Sort sort) {  
		  return db.findAll(sort);
		 }
    
	public List<Financeiro> findByTipo(boolean tipo){
		return db.findByTipo(tipo);
	}
	
	public List<Financeiro> findByData(String data){
		return db.findByData(data);
	}

	public void deleteById(String id){
		db.deleteById(id);
	}

	public void save(Financeiro financeiro){
			db.save(financeiro);
		}
	}