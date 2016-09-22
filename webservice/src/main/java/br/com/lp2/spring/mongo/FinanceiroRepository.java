package br.com.lp2.spring.mongo;


import java.util.List;
import org.springframework.data.domain.Sort;
import org.springframework.data.mongodb.repository.MongoRepository;
import org.springframework.stereotype.Component;

@Component
public interface FinanceiroRepository extends MongoRepository<Financeiro, String>{
	
	List<Financeiro> findByTipo(boolean tipo);
	List<Financeiro> findByData(String data);
	List<Financeiro> findAll(Sort sort);
	void deleteById(String id);

}

