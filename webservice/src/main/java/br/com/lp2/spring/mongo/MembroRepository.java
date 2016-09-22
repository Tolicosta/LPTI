package br.com.lp2.spring.mongo;

import java.util.List;
import org.springframework.data.domain.Sort;
import org.springframework.data.mongodb.repository.MongoRepository;
import org.springframework.stereotype.Component;

@Component
public interface MembroRepository extends MongoRepository<Membro, String>{
	
	List<Membro> findAll(Sort sort);
	List<Membro> findByTipo(int tipo);
	List<Membro> findByNome(String nome);
	void deleteById(String id);
}

