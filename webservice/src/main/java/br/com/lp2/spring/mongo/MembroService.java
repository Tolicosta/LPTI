package br.com.lp2.spring.mongo;

import java.util.List;
import org.springframework.context.ApplicationContext;
import org.springframework.data.domain.Sort;
import br.com.lp2.util.SpringUtil;

public class MembroService {

	private MembroRepository db;
	
	public MembroService() {
		ApplicationContext context=SpringUtil.getContext();
		db = context.getBean(MembroRepository.class);	
	}
 
	public List<Membro> findAll(Sort sort) {  
		  return db.findAll(sort);
		 }
	
	public List<Membro> findByTipo(int tipo){
		return db.findByTipo(tipo);
	}
	
	public List<Membro> findByNome(String nome){
			return db.findByNome(nome);
	}

	public void deleteById(String id){
		db.deleteById(id);
	}

	public void save(Membro membro){
			db.save(membro);
		}
	}