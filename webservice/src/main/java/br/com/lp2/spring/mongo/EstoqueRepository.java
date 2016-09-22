package br.com.lp2.spring.mongo;

import java.util.List;
import org.springframework.data.domain.Sort;
import org.springframework.data.mongodb.repository.MongoRepository;
import org.springframework.stereotype.Component;

@Component
public interface EstoqueRepository extends MongoRepository<Estoque, String>{
	
	List<Estoque> findByTipo(int tipo);
	List<Estoque> findByData(String data);
	List<Estoque> findAll(Sort sort);
	void deleteById(String id);
	Estoque findOne(String id);

}

